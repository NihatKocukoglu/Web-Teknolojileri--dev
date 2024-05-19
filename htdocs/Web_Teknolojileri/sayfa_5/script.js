function clearForm() {
    document.getElementById("contactForm").reset();
}

function submitForm() {
    var formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value
    };

    // Form verilerini başka bir sayfada görüntülemek için AJAX veya başka bir yöntem kullanılabilir.
    // Bu örnekte, verileri bir div içinde görüntülüyoruz.
    var submittedDataElement = document.getElementById("submittedData");
    submittedDataElement.innerHTML = "<h2>Gönderilen Form Verileri:</h2>" +
        "<p><strong>Adı:</strong> " + formData.name + "</p>" +
        "<p><strong>E-posta:</strong> " + formData.email + "</p>" +
        "<p><strong>Mesaj:</strong> " + formData.message + "</p>";
}
