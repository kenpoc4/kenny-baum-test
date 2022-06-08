if( document.querySelector( '.container-hook' ) ) {
    let contenedorHook = document.querySelector( '.container-hook' );
    let hook = document.createElement( 'p' );
    hook.classList.add( 'hook' );
    hook.textContent = 'Este párrafo fue creado y estilizado por medio de un Hook';

    contenedorHook.appendChild( hook );
}