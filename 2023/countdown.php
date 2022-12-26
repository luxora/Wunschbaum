
    <div class="container2" style="margin-left: 33%;"></div>
  <script>
        var cd2 = new Countdown({
            cont: document.querySelector('.container2'),
            countdown: true, // true for classic countdown, false for countup
             date: {
        day: 24,
        month: 12,
        year: 2022,
        hour: 00,
        minute: 0,
        second: 0,
    },
            outputTranslation: {
                year: 'Jahre',
                week: 'Wochen',
                month: 'Monate',
                day: 'Tage',
                hour: 'Stunden',
                minute: 'Minuten',
                second: 'Sekunden',
            },
            endCallback: null,
            outputFormat: 'year|month|day|hour|minute|second',
        });
        cd2.start();
    </script>
    <br>
    

