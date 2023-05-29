<div id="fh5co-couple-story" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" style="margin-bottom: 0px;">
                <h2 style="">{{ @$setting['6_1']->value }}</h2>
                <p style="">{{ @$setting['6_2']->value }}</p>
                <p style="margin-bottom: 10px; font-size: 30px; color: blue; font-weight: 600;">{{ @$setting['6_5']->value }}</p>
                <p>{!! QrCode::size(150)->generate(@$setting['6_4']->value) !!}</p>
                <p style="">{{ @$setting['6_3']->value }}</p>
                <p>
                    <input style="color: white;" type="text" class="btn btn-custom btn-sm" readonly value="{{ @$setting['6_4']->value }}" id="account">
                </p>
                <p>
                    <button class="btn btn-default btn-sm" onclick="accountCopy()" onmouseout="accountOut()">
                        <span class="tooltiptext" id="accountCopyBtn">Salin Rekening</span>
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>