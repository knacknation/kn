  const scriptURL = 'https://script.google.com/macros/s/AKfycbwDegwjPGszf3NbfKOHwsA8YxYgFBwO1ybAq9tAVh6FDdQwIytj/exec'
  const form = document.forms['newsletter']
  form.addEventListener('submit2', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
    $('#newsletter')[0].reset();<!-- for resetting fields after submission -->
  })

$("#newsletter").submit(function(){
    swal("Thank You!", "You have joined our mailing list.", "success");
});
