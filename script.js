let login = 'boby536464'
let pass = 'skfmm89u787t7&%^FR%^%^'
let service = 'Telegram'

let apiURL = `https://www.unlimitedportal.com/api_command.php?cmd=request&user=${login}&pass=${pass}&service=${service}`
console.log(apiURL);

$('button').on('click', function(){
    $.ajax({
        url: "http://unlimitedtest/proxy.php", // Поменяйте на свой URL
        method: "GET",
        dataType: "json",
        success: function(response  ) {
          console.log("Ответ от сервера(sms):", response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error("Ошибка при запросе:", textStatus, errorThrown);
        }
      });
})