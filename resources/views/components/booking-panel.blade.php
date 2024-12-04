<script src="https://panel.hotres.pl/public/api/hotres_v4_chooser.js"></script>
<form action="https://panel.hotres.pl/v4_step1" target="_blank" class="hotresChooser" id="hotresChooser" method="get">
    <input type="hidden" name="oid" id="hotresOid" value="4398" /><input type="hidden" name="lang" id="hotresLang"
        value="" /> <input type="hidden" name="arrival" id="hotresArrival" /><input type="hidden" name="departure"
        id="hotresDeparture" />
    <div class="hotresRangeChooser" id="hotresRangeChooser">
        <div id="hotresArrivalWrap"></div>
        <div id="hotresDepartureWrap"></div>
    </div>
    <div class="hotresAdultsChooser" id="hotresAdultsChooser"><select name="adults" id="hotresAdultsSelect"></select>
    </div>
    <div class="hotresSubmit"><button id="hotresButtonChooser"></button></div>
</form>
<script>
    window.addEventListener('load', (event) => { new hotresChooser({'maxAdults':10});});
</script>