document.getElementById("formContato").addEventListener("submit", function (e) {
  e.preventDefault();

  const nome = document.getElementById("nome").value.trim();
  const endereco = document.getElementById("endereco").value.trim();
  const email = document.getElementById("email").value.trim();
  const pedido = document.getElementById("pedido").value.trim();

  if (!nome || !endereco || !email || !pedido) {
    alert("Por favor, preencha todos os campos.");
    return;
  }

  if (!email.includes("@") || !email.includes(".")) {
    alert("Por favor, insira um email válido.");
    return;
  }

  alert("Formulário enviado com sucesso!");
  this.reset();
});
