const tagDisplay = document.querySelector('#tagDisplay');

$(document).ready(function() {
    $(".mul-select").select2({
        placeholder: "Categories",
        categories: true,
        tokenSeparators: ['/',',',';'," "]
    });
})
