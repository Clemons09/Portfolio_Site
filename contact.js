

function sendMail(params) {
  let tempParams = {
    to_name: document.getElementById('toName').value,
    from_name: document.getElementById('fromName').value,
    message: document.getElementById('msg').value
  };

  emailjs.send('service_ybtz01h', 'template_e6s7f0o', tempParams)
  .then(function(res) {
    console.log("success", res.status);
    alert("Message Sent! Thank you.");
  });
}


window.onload = function() {
  document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();
      // generate a five digit number for the contact_number variable
      this.contact_number.value = Math.random() * 100000 | 0;
      // these IDs from the previous steps
      emailjs.sendForm('contact_service', 'contact_form', this)
          .then(function() {
              console.log('SUCCESS!');
          }, function(error) {
              console.log('FAILED...', error);
          });
  });
}