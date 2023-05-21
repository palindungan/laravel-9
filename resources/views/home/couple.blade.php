<div id="fh5co-couple" style="padding-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                <h2 style="font-size: 31px;">{{ @$setting['2_1']->value }}</h2>
                <p>{{ @$setting['2_2']->value }}</p>
            </div>
        </div>
        <div class="couple-wrap animate-box">
            <div class="couple-half">
                <div class="groom">
                    <img src="{{ @$bride->photo_thumbnail }}" alt="groom" class="img-responsive">
                </div>
                <div class="desc-groom">
                    <h3>{{ @$bride->name_degree_first ? @$bride->name_degree_first . ' ' : '' }}{{ @$bride->name }}{{ @$bride->name_degree_last }}</h3>
                    <p>Putri dari Bapak {{ @$bride->name_parent_male }} dan Ibu {{ @$bride->name_parent_female }}</p>
                </div>
            </div>
            <p class="heart text-center"><i class="icon-heart2"></i></p>
            <div class="couple-half">
                <div class="bride">
                    <img src="{{ @$groom->photo_thumbnail }}" alt="groom" class="img-responsive">
                </div>
                <div class="desc-bride">
                    <h3>{{ @$groom->name_degree_first ? @$groom->name_degree_first . ' ' : '' }}{{ @$groom->name }}{{ @$groom->name_degree_last }}</h3>
                    <p>Putra dari Bapak {{ @$groom->name_parent_male }} dan Ibu {{ @$groom->name_parent_female }}</p>
                </div>
            </div>
        </div>
    </div>
</div>