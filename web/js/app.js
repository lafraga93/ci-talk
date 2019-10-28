function sendImage(event) {

    let formData = new FormData();
    let imagefile = event.target.files[0];

    formData.append("file", imagefile);

    axios.post('/upload', formData, {

        headers: {
          'Content-Type': 'multipart/form-data'
        }

    })

    .then(function(response) {

        window.open(response.data.url);
        location.reload();

    });

}
