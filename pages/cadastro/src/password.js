$('#btn-pass').click(() => {
  if (String($('#btn-pass i').attr('class')) == 'fas fa-eye') {
    $('#btn-pass i').attr('class', 'fas no-visible');
    $('#txtPass').attr('type', 'text');
  }

  else {
    $('#btn-pass i').attr('class', 'fas fa-eye');
    $('#txtPass').attr('type', 'password');
  }
});