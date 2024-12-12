<script src="https://panel.hotres.pl/public/api/hotres_v4_chooser.js"></script>
<form action="https://panel.hotres.pl/v4_step1" target="_blank" class="hotresChooser" id="hotresChooser" method="get">
    <input type="hidden" name="oid" id="hotresOid" value="4398" /><input type="hidden" name="lang" id="hotresLang"
        value="" /> <input type="hidden" name="arrival" id="hotresArrival" /><input type="hidden" name="departure"
        id="hotresDeparture" />
    <div class="hotresRangeChooser" id="hotresRangeChooser" style="color: #575c6b" >
        <div id="hotresArrivalWrap" ></div>
        <div id="hotresDepartureWrap" ></div>
    </div>
    <div class="hotresAdultsChooser" id="hotresAdultsChooser" style="color: #575c6b;"><select name="adults" id="hotresAdultsSelect"></select>
    </div>
    <div class="hotresSubmit"><button id="hotresButtonChooser" style="background-color: #575c6b; color: white; font-family: 'Work Sans', sans-serif;font-size: 16px"
        ></button></div>
</form>
<script>
    window.addEventListener('load', (event) => { new hotresChooser({'maxAdults':10});});
</script>