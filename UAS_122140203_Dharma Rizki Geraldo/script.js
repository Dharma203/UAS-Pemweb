document.getElementById("myForm").addEventListener("submit", (event) => {
  event.preventDefault();
  validateForm();
});

document.getElementById("myForm").addEventListener("reset", () => {
  console.log("Form has been reset.");
});

function validateForm() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const gender = document.querySelector('input[name="gender"]:checked');
  const agree = document.getElementById("agree").checked;

  if (!name || !email || !gender || !agree) {
    alert("Semua field wajib diisi!");
    return;
  }

  const data = { name, email, gender: gender.value };
  populateTable(data);
}

function populateTable(data) {
  const tableBody = document
    .getElementById("data-table")
    .querySelector("tbody");
  const row = document.createElement("tr");
  row.innerHTML = `
        <td>${data.name}</td>
        <td>${data.email}</td>
        <td>${data.gender}</td>
    `;
  tableBody.appendChild(row);
}
