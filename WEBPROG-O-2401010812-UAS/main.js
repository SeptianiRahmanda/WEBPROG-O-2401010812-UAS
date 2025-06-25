
function confirmDelete(link) {
  if (confirm("Yakin ingin menghapus data ini?")) {
    window.location.href = link;
  }
  return false;
}


function validateForm(formId) {
  const form = document.getElementById(formId);
  const inputs = form.querySelectorAll("input, select");
  let valid = true;

  inputs.forEach(input => {
    if (input.value.trim() === "") {
      alert("Isi semua field terlebih dahulu!");
      input.focus();
      valid = false;
      return false;
    }
  });

  return valid;
}

document.addEventListener("DOMContentLoaded", () => {
  const rows = document.querySelectorAll("table tr");
  rows.forEach(row => {
    row.addEventListener("mouseenter", () => row.style.backgroundColor = "#f0f8ff");
    row.addEventListener("mouseleave", () => row.style.backgroundColor = "");
  });
});
