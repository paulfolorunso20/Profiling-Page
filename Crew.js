document.addEventListener('DOMContentLoaded', function () {
    const licenseNameInput = document.getElementById('licenseNameInput');
    const licenseNumberInput = document.getElementById('licenseNumberInput');
    const licenseStartDateInput = document.getElementById('licenseStartDateInput');
    const licenseExpiryDateInput = document.getElementById('licenseExpiryDateInput');
    const addLicenseBtn = document.getElementById('addLicenseBtn');
    const licensesTableBody = document.getElementById('licensesTableBody');
    const licensesTableContainer = document.getElementById('licensesTableContainer');
    const submitBtn = document.getElementById('submitBtn');

    let licenseCount = 0;
    const licensesData = [];

    addLicenseBtn.addEventListener('click', function () {
        const name = licenseNameInput.value;
        const number = licenseNumberInput.value;
        const start = licenseStartDateInput.value;
        const expiry = licenseExpiryDateInput.value;

        if (!name || !number || !start || !expiry) {
            alert('Please fill in all license fields.');
            return;
        }

        licenseCount++;
        licensesTableContainer.style.display = 'block';
        submitBtn.style.display = 'inline-block';

        licensesData.push({
            name,
            number,
            start,
            expiry
        });

        const formattedStart = formatDate(start);
        const formattedExpiry = formatDate(expiry);

        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${licenseCount}</td>
            <td>${name}</td>
            <td>${number}</td>
            <td>${formattedStart}</td>
            <td>${formattedExpiry}</td>
        `;

        licensesTableBody.appendChild(row);

        // Clear fields
        licenseNameInput.value = '';
        licenseNumberInput.value = '';
        licenseStartDateInput.value = '';
        licenseExpiryDateInput.value = '';

        // Add hidden remove functionality (remove row on click)
        row.addEventListener('click', function () {
            if (confirm("Remove this license?")) {
                const index = row.rowIndex - 1;
                licensesData.splice(index, 1);
                row.remove();
                licenseCount--;
                updateSerialNumbers();

                if (licenseCount === 0) {
                    licensesTableContainer.style.display = 'none';
                    submitBtn.style.display = 'none';
                }
            }
        });
    });

    function formatDate(dateString) {
        const parts = dateString.split('-'); // yyyy-mm-dd
        return `${parts[2]}/${parts[1]}/${parts[0]}`;
    }

    function updateSerialNumbers() {
        const rows = licensesTableBody.querySelectorAll('tr');
        rows.forEach((row, index) => {
            row.cells[0].textContent = index + 1;
        });
    }

    const form = document.getElementById('crewProfilingForm');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const crewData = {
            name: formData.get('crewName'),
            callSign: formData.get('callSign'),
            gender: formData.get('gender'),
            dob: formData.get('dob'),
            nationality: formData.get('nationality'),
            email: formData.get('email'),
            occupation: formData.get('occupation'),
        };

        const data = {
            crew: crewData,
            licenses: licensesData
        };

        console.log("🚀 SUBMIT DATA:", data);
        alert("Form submitted! Check the console for details.");
    });
});
