<a href="{{ $href ?? '' }}" class="btn btn-warning btn-sm mb-1 mt-1"><i class="fas fa-edit"></i></a>
<form action="{{ $action ?? '' }}" method="post" class="d-inline">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
</form>
