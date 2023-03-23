document.addEventListener('DOMContentLoaded', event => {
    //cookeis
    const cookies = document.cookie.split(';');
    let cookie = null;
    cookies.forEach(item => {
        if (item.indexOf('items') > -1) {
            cookie = item;
        }
    });

    if (cookie != null) {
        const count = cookie.split('=')[1];
        console.log(count);
        document.querySelector('.btn-carrito').innerHTML = `(${count}) <img src="https://img.icons8.com/ios-glyphs/30/000000/add-shopping-cart.png"/>`;
    }
    actualizarCarritoUI();
});

const bCarrito = document.querySelector('.btn-carrito');

function actualizarCarritoUI() {
    fetch('https://berrymuch.azurewebsites.net/api/carrito/api_carrito.php?action=mostrar')
        //fetch('http://localhost/berryMuch/api/carrito/api_carrito.php?action=mostrar')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            let tablaCont = document.querySelector('#tablac');
            let html = `
            <table class = 'table' >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Subtotal: </th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            `;

            data.items.forEach(element => {
                html += `
                    <tbody>
                        <tr>
                            <input type='hidden' value='${element.id}'/>
                            <th>${element.nombre}</th>
                            <th>${element.cantidad}</th>
                            <th>$${element.precio}</th>
                            <th>$${element.subtotal}</th>
                            <th><div class'botones'><button class='btn btn-outline-dark mt-auto btn-remove'>Quitar 1 del carrito</button></div></th>
                        </tr>
                    </tbody>
                    `;
            });

            html += `<th>Total</th>
                    <th></th>
                    <th></th>
                    <th>$${data.info.total}</th>`;

            html += `</table>`;

            tablaCont.innerHTML = html;

            document.cookie = `items=${data.info.count}`;

            bCarrito.innerHTML = `<span class="badge bg-dark text-white ms-1 rounded-pill">${data.info.count}</span> <img src="https://img.icons8.com/ios-glyphs/30/000000/add-shopping-cart.png"/>`;

            document.querySelectorAll('.btn-remove').forEach(boton => {
                boton.addEventListener('click', e => {
                    const id = boton.parentElement.parentElement.parentElement.children[0].value;
                    removeItemFromCarrito(id);
                });
            });
        });
}

function removeItemFromCarrito(id) {
    fetch('https://berrymuch.azurewebsites.net/api/carrito/api_carrito.php?action=remove&id=' + id)
        //fetch('http://localhost/berryMuch/api/carrito/api_carrito.php?action=remove&id=' + id)
        .then(res => res.json())
        .then(data => {
            console.log(data.status);
            actualizarCarritoUI();
        });
}