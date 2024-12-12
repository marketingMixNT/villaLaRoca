<script type="text/javascript" src="https://panel.hotres.pl/public/api/hotres_v4_popup.js"></script>
<button id="hotresPopup" class="link-hover  text-secondary-400 font-medium link-hover--dark mt-6">{{__('global.check-testimonials')}}</button>
<script>
    document.getElementById('hotresPopup').onclick = function (e) {
      
        function getLangFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);

            return urlParams.get('lang') === 'en-us' ? 'en' :'pl'

            
        }

        const lang = getLangFromUrl(); 


        showHotresPopup({
            "oid": 4398,
            "lang": lang,
            "action": "reviews"
        });

        return false;
    }
</script>