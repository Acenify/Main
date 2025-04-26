{{-- resources/views/filament/resources/invoice-resource/pages/view-invoice.blade.php --}}

@push('styles')
    <title>Invoice - {{ $record->invoice_number }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/invoice-style.css') }}">
    <style>
        .tm_terms h4 {
        font-size: 18px;
        margin-top: 20px;
        margin-bottom: 15px;
        color: #333;
    }

    .tm_terms p {
        font-size: 14px;
        color: #555;
        margin-bottom: 20px;
    }

    .terms-list {
        list-style-type: none;
        padding-left: 0;
    }

    .terms-list li {
        font-size: 16px;
        color: #555;
        margin-bottom: 10px;
        line-height: 1.6;
        position: relative;
        padding-left: 25px;
    }

    .terms-list li::before {
        content: '•';
        color: #063474;
        font-size: 20px;
        position: absolute;
        left: 0;
        top: 0;
    }
    </style>
@endpush

<x-filament::page>
    <div class="container mt-4">
        <div class="card mb-4 drop-shadow-2xl">
            <div class="card-body">
                <div class="flex justify-center bg-white dark:bg-gray-800 rounded p-2">
                    <!-- Tombol Download -->
                    <x-filament::link
                        href="{{ route('invoice.download', ['invoice' => $record->id]) }}"
                        icon="heroicon-o-arrow-down-on-square"
                        class="bg-green-500 hover:bg-green-600 text-white"
                    >
                        Download PDF
                    </x-filament::link>

                    <!-- Tombol Delete -->
                    <x-filament::button
                        onclick="confirm('Apakah Anda yakin ingin menghapus invoice ini?') || event.stopImmediatePropagation()"
                        wire:click="deleteInvoice"
                        icon="heroicon-o-trash"
                        class="bg-red-500 hover:bg-red-600 text-white">
                        Delete
                    </x-filament::button>

                    <!-- Tombol Update -->
                    <x-filament::button
                        onclick="window.location.href='{{ route('filament.admin.resources.invoices.edit', $record->id) }}'"
                        icon="heroicon-o-pencil-square"
                        class="bg-blue-500 hover:bg-blue-600 text-white">
                        Update
                    </x-filament::button>
                </div>
            </div>
        </div>
    </div>
    <div class="tm_invoice tm_style1 tm_type1" id="tm_download_section">
        <div class="tm_invoice_in">
            <!-- Header Invoice -->
            <div class="tm_invoice_head tm_top_head tm_mb15 tm_align_center">
                <div class="tm_invoice_left">
                    <div class="tm_logo">
                        <img src="{{ asset('assets/img/logo/iconfy-logo.png') }}" alt="Logo" />
                    </div>
                </div>
                <div class="tm_invoice_right tm_text_right tm_mobile_hide">
                    <div class="tm_f50 tm_text_uppercase tm_white_color">Invoice</div>
                </div>
                <div class="tm_shape_bg tm_accent_bg tm_mobile_hide"></div>
            </div>

            <!-- Informasi Invoice -->
            <div class="tm_invoice_info tm_mb25">
                <p class="tm_primary_color"><strong>Payment Method: Transfer</strong>
                <p><strong>Invoice ID:</strong> {{ $record->invoice_number }}</p>
                <p><strong>Invoice Date:</strong> {{ \Carbon\Carbon::parse($record->invoice_date)->format('d-m-Y') }}</p>
                {{-- <div class="tm_invoice_seperator tm_accent_bg"></div> --}}
            </div>

            <!-- Invoice To / Pay To -->
            <div class="tm_invoice_head tm_mb10 tm_primary_color">
                <div class="tm_invoice_left">
                    <h3>Invoice to</h3>
                    <p>
                        {{ $record->customer->name }}<br>
                        {{ $record->customer->address }}<br>
                        {{ $record->customer->email }}
                    </p>
                </div>
                <div class="tm_invoice_right tm_text_right">
                    <h3>Pay To</h3>
                    <p>
                        Acenify<br>
                        Nerogtog, Kec. Cipondoh, Kota Tangerang, Banten 15146<br>
                        acenify.official@gmail.com
                    </p>
                </div>
            </div>

            <!-- Tabel Item -->
            <div class="tm_table tm_style1 tm_primary_color" >
                <div class="tm_table_responsive">
                    <table class="tm_border tm_table_hover">
                        <thead class="tm_accent_bg tm_table_header tm_white_color">
                            <tr>
                                <th class="tm_f16 tm_bold tm_table_header_cell">Item</th>
                                <th class="tm_f16 tm_bold tm_table_header_cell">Description</th>
                                <th class="tm_f16 tm_bold tm_table_header_cell">Price</th>
                                <th class="tm_f16 tm_bold tm_table_header_cell">Qty</th>
                                <th class="tm_f16 tm_bold tm_table_header_cell">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($record->invoiceItems as $item)
                                <tr class="tm_table_row">
                                    <td class="tm_f14 tm_table_cell tm_text_center tm_padd_20">{{ $item->item->name }}</td>
                                    <td class="tm_f14 tm_table_cell tm_text_center tm_padd_20">{{ $item->item->description }}</td>
                                    <td class="tm_f14 tm_table_cell tm_text_right tm_padd_20">Rp {{ number_format($item->item->price, 0, ',', '.')  }}</td>
                                    <td class="tm_f14 tm_table_cell tm_text_center tm_padd_20">{{ $item->quantity }}</td>
                                    <td class="tm_f14 tm_table_cell tm_text_right tm_padd_20">Rp {{ number_format($item->total_price, 0, ',', '.' ), 0, ',', '.' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Footer Invoice -->
            <div class="tm_invoice_footer tm_border_top tm_mb15 tm_m0_md tm_primary_color" style="margin-top: 20px;">
                <div class="tm_left_footer">
                    <h4>Payment Info</h4>
                    <p>Bank : BCA ( Bank Central Asia )</p>
                    <p>Rekening : 4750921111 ( Hendy Tanpratama )</p>
                </div>
                <div class="tm_right_footer">
                    <p>Subtotal: Rp {{ number_format($record->invoiceItems->sum('total_price'), 0, ',', '.') }}</p>
                    <p>Discount : Rp {{ number_format($record->sum('discount'), 0, ',', '.') }}</p>
                    <h3>Down Payment: Rp {{ number_format($record->sum('down_payment'), 0, ',', '.') }}</h3>
                    <h3>Total: Rp {{ number_format($record->invoiceItems->sum('total_price'), 0, ',', '.') }}</h3>
                </div>
            </div>

            <!-- Signature -->
            <div class="tm_invoice_footer tm_type1">
                <div class="tm_right_footer">
                    <div class="tm_sign tm_text_center">
                        <img style="align-content: center; align-items:center; margin: auto; width: 30%; height: auto !important; " src="{{ asset('assets/img/logo/handsign.png') }}" alt="Sign" />
                        <p class="tm_m0 tm_ternary_color">Fadlan Diyanuar</p>
                        <p class="tm_m0 tm_f16 tm_primary_color">Project Manager</p>
                    </div>
                </div>
            </div>

            <!-- Terms and Conditions -->
            <div class="tm_terms">
                <h4>Terms and Conditions</h4>
                <p>
                    By engaging in our website development services, the Client agrees to the following terms:
                </p>
                <ul class="terms-list">
                    <li>All project requirements must be clearly outlined and agreed upon before development begins.</li>
                    <li>Any additional work or changes requested by the Client during development may result in additional charges and extended timelines.</li>
                    <li>The Client is responsible for providing all necessary content (text, images, logos, etc.) in a timely manner to ensure project deadlines are met.</li>
                    <li>Payment terms are based on the agreed-upon milestones. Failure to meet payment deadlines may result in project delays or suspension.</li>
                    <li>The Client will retain full ownership of the website once all payments have been completed. However, any third-party assets used (such as plugins or themes) may remain under their respective licenses.</li>
                    <li>We reserve the right to showcase completed projects in our portfolio unless otherwise specified by the Client.</li>
                    <li>The Client is responsible for ensuring that the website content complies with all applicable laws and regulations.</li>
                </ul>
            </div>
        </div>
    </div>
</x-filament::page>
