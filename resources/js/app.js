import './bootstrap';

import flatpickr from 'flatpickr'
import 'flatpickr/dist/flatpickr.min.css'

document.addEventListener('DOMContentLoaded', function () {
  flatpickr("#calendar", {
    inline: true,
    minDate: "today",
    dateFormat: "Y-m-d",
    onChange: function(selectedDates, dateStr, instance) {
      document.getElementById('selectedDate').value = dateStr
    }
  });
});

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()
