<div>
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // This will prevent default link behavior and use Livewire for navigation
                document.querySelectorAll('a[data-route]').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        let route = this.getAttribute('data-route');
                        @this.navigate(route);
                    });
                });
            });
        </script>
    @endsection
</div>
