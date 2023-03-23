<div class="col mb-5">
    <div class="card h-100">
        <input type="hidden" id="id" value="<?php echo $item['id']; ?>">
        <!-- Product image-->
        <img width="30%" height="35%" class="card-img-top" src="images/<?php echo $item['imagen']; ?>" alt="Arandano" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $item['nombre']; ?></h5>
                <!-- Product price-->
                <?php echo $item['precio'];?>$
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center">
                <button class="btn btn-outline-dark mt-auto btn-add">Añadir al carrito</button>
            </div>
        </div>
    </div>
</div>