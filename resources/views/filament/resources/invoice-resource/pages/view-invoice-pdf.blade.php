<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - {{ $record->invoice_number }}</title>
    <style>
        * {
            -webkit-print-color-adjust: exact !important;
            /* Chrome, Safari 6 – 15.3, Edge */
            color-adjust: exact !important;
            /* Firefox 48 – 96 */
            print-color-adjust: exact !important;
            /* Firefox 97+, Safari 15.4+ */
        }

        @page {
            margin: 0.3cm 0.2cm;
            size: A4;
            padding: 10px;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .tm_invoice_head {
        position: relative;
        width: 100%;
        height: 110px;
        padding: 0;
        display: flex;
        align-items: center;
        box-sizing: border-box;
        }
        .tm_invoice_left {
        z-index: 2;
        flex: 0 0 auto;
        }
        .tm_logo img {
        max-height: 60px;
        }
        .tm_shape_bg {
            position: absolute;
            height: 50%;
            background: #063474;
            width: 70%;
            transform: skewX(35deg);
            top: 0px;
            right: -100px;
            overflow: hidden;
        }
        .tm_shape_bg .tm_invoice_title {
        margin-top: 10px;
        transform: skewX(-35deg);
        color: white;
        font-size: 28px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        }

        .header {
            background-color: #2E3A59;
            color: white;
            padding: 20px;
            position: relative;
        }

        .logo {
            float: left;
        }

        .logo img {
            height: 50px;
        }

        .invoice-title {
            float: right;
            font-size: 28px;
            font-weight: bold;
            margin-top: 10px;
        }

        .clear {
            clear: both;
        }

        .payment-info {
            margin-top: 20px;
            margin-bottom: 20px;
            display: table;
            width: 100%;
        }

        .payment-info div {
            display: table-cell;
            width: 33%;
            vertical-align: top;
        }

        .invoice-to-payto {
            margin-top: 20px;
            display: table;
            width: 100%;
        }

        .invoice-to,.pay-to{
            display: table-cell;
            width: 50%;
            vertical-align: top;

        }

        .pay-to{
            text-align: right;
            float: right;
        }

        .items-table {
            margin-top: 30px;
            width: 100%;
            border-collapse: collapse;
        }

        .items-table th {
            background-color: #063474;
            color: white;
            padding: 8px;
            text-align: left;
            font-weight: bold;
        }

        .items-table td {
            background-color: #f9f9f9;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .payment-summary {
            margin-top: 30px;
            display: table;
            width: 100%;
        }

        .payment-left, .payment-right {
            display: table-cell;
            width: 50%;
            vertical-align: top;
        }

        .payment-right {
            text-align: right;
        }

        .payment-right p strong {
            font-size: 16px;
        }

        .signature {
            float: right;

            text-align: center;
            margin-top: 50px;
        }

        .signature img {
            height: 80px;
        }

        .terms {
            margin-top: 50px;
            font-size: 11px;
        }

        .terms ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .terms ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <div class="tm_invoice_head">
        <div class="tm_invoice_left">
            <div class="tm_logo">
                <img src="{{ public_path('assets/img/logo/iconfy-logo.png') }}" alt="Logo" />
            </div>
        </div>

        <div class="tm_shape_bg">
            <div class="tm_invoice_title">INVOICE</div>
        </div>
    </div>

    <!-- Payment Info -->
    <div class="payment-info">
        <div><p><strong>Payment Method:</strong> Transfer</p></div>
        <div><p><strong>Invoice ID:</strong> {{ $record->invoice_number }}</p></div>
        <div><p><strong>Invoice Date:</strong> {{ \Carbon\Carbon::parse($record->invoice_date)->format('d-m-Y') }}</p></div>
    </div>

    <!-- Invoice To / Pay To -->
    <div class="invoice-to-payto">
        <div class="invoice-to">
            <p><strong>Invoice to</strong></p>
            <p>{{ $record->customer->name }}</p>
            <p>{{ $record->customer->email }}</p>
        </div>
        <div class="pay-to" class="text-align: right;">
            <p><strong>Pay To</strong></p>
            <p>Acenify</p>
            <p>Nerogtog, Kec. Cipondoh, Kota Tangerang, Banten 15146</p>
            <p>acenify.official@gmail.com</p>
        </div>
    </div>

    <!-- Items Table -->
    <table class="items-table">
        <thead>
            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($record->invoiceItems as $item)
                <tr>
                    <td>{{ $item->item->name }}</td>
                    <td>{{ $item->item->description }}</td>
                    <td>Rp {{ number_format($item->item->price, 0, ',', '.') }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rp {{ number_format($item->total_price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Payment Summary -->
    <div class="payment-summary">
        <div class="payment-left">
            <p><strong>Payment Info</strong></p>
            <p>Bank: BCA (Bank Central Asia)</p>
            <p>Rekening: 4750921111 (Hendy Tanpratama)</p>
        </div>
        <div class="payment-right">
            <p>Subtotal: Rp {{ number_format($record->invoiceItems->sum('total_price'), 0, ',', '.') }}</p>
            <p>Discount: Rp {{ number_format($record->discount, 0, ',', '.') }}</p>
            <p>Down Payment: Rp {{ number_format($record->down_payment, 0, ',', '.') }}</p>
            <p><strong>Total: Rp {{ number_format($record->invoiceItems->sum('total_price') - $record->discount - $record->down_payment, 0, ',', '.') }}</strong></p>
        </div>
    </div>

    <!-- Signature -->
    <div class="signature">
        <img src="{{ public_path('assets/img/logo/handsign.png') }}" alt="Signature" />
        <p><strong>Fadlan Diyanuar</strong></p>
        <p>Project Manager</p>
    </div>

    <!-- Terms and Conditions -->
    <div class="terms">
        <h4>Terms and Conditions</h4>
        <p>By engaging in our website development services, the Client agrees to the following terms:</p>
        <ul>
            <li>All project requirements must be clearly outlined and agreed upon before development begins.</li>
            <li>Any additional work or changes may result in additional charges and extended timelines.</li>
            <li>The Client provides all necessary content (text, images, logos, etc.).</li>
            <li>Payment terms based on agreed milestones; delays in payment may cause project suspension.</li>
            <li>Client retains ownership of the website after full payment completion.</li>
            <li>We reserve the right to showcase the project unless otherwise specified by the client.</li>
            <li>Client is responsible for compliance with laws and regulations.</li>
        </ul>
    </div>

</body>
</html>
