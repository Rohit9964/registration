function handleSubmit(event) {
  event.preventDefault();
  
  const form = document.getElementById('admissionForm');
  const formData = new FormData(form);
  const submittedInfo = {};

  formData.forEach((value, key) => {
    submittedInfo[key] = value;
  });

  localStorage.setItem('submittedInfo', JSON.stringify(submittedInfo));
  window.location.href = 'submitted.html';
}

document.addEventListener('DOMContentLoaded', () => {
  const submittedInfo = JSON.parse(localStorage.getItem('submittedInfo'));
  if (submittedInfo) {
    const submittedInfoDiv = document.getElementById('submittedInfo');
    for (const [key, value] of Object.entries(submittedInfo)) {
      const p = document.createElement('p');
      p.textContent = `${key}: ${value}`;
      submittedInfoDiv.appendChild(p);
    }
  }
});


