<form action={{url('admin/offer/delete/'.$id)}} method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
</form>
