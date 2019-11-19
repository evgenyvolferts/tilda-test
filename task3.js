// написать js скрипт, на вход которого подается список городов и телефонов
// и скрипт должен заменить телефон в ссылках (href=”tel:+7...”) на телефон
// из списка в соответствии с городом пользователя открывшего страницу

// здесь нужно уточнить - я предполагаю, что в проекте есть подключенный jquery

$(document).ready(function () {
    var phones = {'moscow': '+74951111111', 'saint-petersburg': '+78125555555'};
    var userCity = 'moscow';

    $("a").each(function (index, value) {
        if ($(this).attr('href').indexOf('tel:') === 0) {
            $(this).attr('href', 'tel:' + phones[userCity]);
        }
    });
});