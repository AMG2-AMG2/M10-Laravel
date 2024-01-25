<form action="{{ $route }}" method="post">
    @csrf
    {{ method_field($method) }}
    <!-- Alles blijft het zelfde -->
</form>