const searchBookButton = document.getElementById('search-book');
searchBookButton.addEventListener('click', function() {
    const bookTitle = document.getElementById('book-title').value
    if(bookTitle != ''){
        const preloader = document.getElementById('preloader');
        preloader.style.opacity = '0.5'
        preloader.style.visibility = 'visible'
        searchData(bookTitle)
    }
});

const searchData = (valor) => {
    const baseUrl = window.location.origin;
    const endpoint = '/searchbook';

    const url = baseUrl + endpoint;
    const data = {
        search: valor,
    };
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(data)
    };
    fetch(url, requestOptions)
    .then(response => response.json())
    .then(data => {
        preloader.style.opacity = '0'
        preloader.style.visibility = 'hidden'
        const pdfLinks = data.results.pdfLinks;
        const modalResultBooks = new bootstrap.Modal(document.getElementById('modalResultBooks'), {
            keyboard: false
          })
        modalResultBooks.show()

        let modalBody = document.querySelector('.modal-body');
        modalBody.innerHTML = '';
        document.getElementById('book-title').value = '';
        const listGroup = document.createElement('ul');
        listGroup.className = 'list-group';

        // Agrega el elemento ul (list-group) al modal-body
        modalBody.appendChild(listGroup);

        pdfLinks.forEach(function(link, i) {
        
            // Crea un elemento li para la lista
            const listItem = document.createElement('li');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
        
            // Crea un elemento span para el contador (badge)
            const badge = document.createElement('span');
            badge.className = 'badge bg-primary rounded-pill';
            const icon = document.createElement('i');
            icon.className = 'fa-solid fa-file-pdf';
            badge.appendChild(icon);
            // Crea un elemento de anclaje para el enlace
            const anchor = document.createElement('a');
            anchor.href = link;
            anchor.textContent = 'Link : ' + valor;
            anchor.className = 'list-group-item-action';
            anchor.setAttribute('target', '_blank');
        
            // Agrega el span (badge) al elemento li
            listItem.appendChild(anchor);
            listItem.appendChild(badge);
        
            // Agrega el elemento li al ul (list-group)
            listGroup.appendChild(listItem);
        });
    })
    .catch(error => {
        // Maneja errores de la solicitud aquí
        console.error('Error en la solicitud:', error);
    });
}