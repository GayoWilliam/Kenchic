<x-app-layout>
    <div id="reportContainer-{{ $report['id'] }}" class="h-full"></div>
    <script>
        var models = window['powerbi-client'].models;

        var embedConfiguration = {
            type: 'report',
            tokenType: models.TokenType.Aad,
            accessToken: '{{ session('azure_access_token') }}',
            embedUrl: '{{ $report['embedUrl'] }}',
            id: '{{ $report['id'] }}',
            settings: {
                filterPaneEnabled: false,
                navContentPaneEnabled: true
            }
        };

        console.log("Embed Configuration: ", embedConfiguration);

        var reportContainer = document.getElementById('reportContainer-{{ $report['id'] }}');
        var report = powerbi.embed(reportContainer, embedConfiguration);

        report.on('loaded', function() {
            console.log("Report loaded successfully.");
        });

        report.on('error', function(event) {
            var errorMsg = event.detail;
            console.error("Embedding Error: ", errorMsg);
        });
    </script>
    {{-- <iframe title="KENCHIC V0.52-2" class="h-full w-full" src="https://app.powerbi.com/view?r=eyJrIjoiMDE4NGE0OTEtZDMyMC00N2Q0LTgzNTMtZTUzYWYyOTI4MTcxIiwidCI6IjI5MDZlYmE5LWUzNzYtNGZiMi05YTI2LWYzN2Q1NTRlMzA2YiIsImMiOjl9" frameborder="0" allowFullScreen="true"></iframe> --}}
</x-app-layout>
