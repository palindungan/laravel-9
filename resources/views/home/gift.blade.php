<div id="fh5co-couple-story" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" style="margin-bottom: 0px;">
                <h2 style="">{{ @$setting['6_1']->value }}</h2>
                <p style="">{{ @$setting['6_2']->value }}</p>
                <p><img style="width: 200px;" src="{{ asset('wedding/logos/Bank_Mandiri_logo_2016.svg') }}" alt="Logo Bank"/></p>
                <p><img src="{{ asset('wedding/images/qrcode_bank_mandiri_150.png') }}" alt="Rekening Bank Mandiri"/></p>
                <p style="">{{ @$setting['6_3']->value }}</p>
                <p>
                    <input type="text" class="btn btn-info btn-sm" readonly value="{{ @$setting['6_4']->value }}">
                </p>
                <p>
                    <button class="btn btn-default btn-sm">Copy Rekening</button>
                </p>
            </div>
        </div>
    </div>
</div>