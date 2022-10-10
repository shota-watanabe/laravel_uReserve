import flatpickr from "flatpickr";
import { Japanese } from "flatpickr/dist/l10n/ja.js"

// 第一引数にID、第二引数にオプションをオブジェクト形式で設定
flatpickr("#event_date", {
  "locale": Japanese,
  minDate: "today",
  maxDate: new Date().fp_incr(30)
});

const setting = {
  "locale": Japanese,
  enableTime: true,
  noCalendar: true,
  dateFormat: "H:i",
  time_24hr: true,
  minTime: "10:00",
  maxTime: "20:00",
}

flatpickr("#start_time", setting);
flatpickr("#end_time", setting);