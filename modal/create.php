<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="" class="formCreate" method="post">
                <div class="form-group">
                    <label for=""> Product name</label>
                    <input type="text" name="name" class=" form-control">
                </div>
                <div class="form-group">
                    <label for=""> Product price </label>
                    <input type="text" name="price" class=" form-control">
                </div>
                <div class="form-group">
                    <label for=""> Product qty </label>
                    <input type="text" name="qty" class=" form-control">
                </div>
                <div class="form-group">
                    <label for=""> Product image </label>
                    <input type="file" name="image" class=" form-control">
                    <button class=" btn btn-primary mt-2" type=" button">Upload </button>
                </div>
               
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="CreateProduct()" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>