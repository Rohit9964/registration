document.getElementById('admissionForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const mobile = document.getElementById('mobile').value;
  const state = document.getElementById('state').value;
  const city = document.getElementById('city').value;
  const previousMarks = document.getElementById('previousMarks').value;
  const jeeRank = document.getElementById('jeeRank').value;
  const branch = document.getElementById('branch').value;
  const dob = document.getElementById('dob').value;
  const address = document.getElementById('address').value;
  
  const submittedInfo = `
    <p><strong>Name:</strong> ${name}</p>
    <p><strong>Email:</strong> ${email}</p>
    <p><strong>Mobile Number:</strong> ${mobile}</p>
    <p><strong>State:</strong> ${state}</p>
    <p><strong>City:</strong> ${city}</p>
    <p><strong>Previous College Marks:</strong> ${previousMarks}%</p>
    <p><strong>JEE Rank:</strong> ${jeeRank}</p>
    <p><strong>Preferred Branch:</strong> ${branch}</p>
    <p><strong>Date of Birth:</strong> ${dob}</p>
    <p><strong>Address:</strong> ${address}</p>
  `;
  
  document.getElementById('submittedInfo').innerHTML = submittedInfo;
});

