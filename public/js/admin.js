   // Función para previsualizar la imagen antes de subirla
   function previewImage(event) {
    const previewContainer = document.getElementById('imagePreviewContainer');
    const previewImage = document.getElementById('imagePreview');
    
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        previewImage.src = e.target.result;
        previewContainer.style.display = 'block'; // Mostrar la vista previa
    };

    if (file) {
        reader.readAsDataURL(file);
    }
}