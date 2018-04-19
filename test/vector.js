/** @namespace __VECTOR__ */
var __VECTOR__ = {};

jQuery(document).ready(function()
{
    __VECTOR__.initialize();
});

/**
 * initializes the application
 *
 * @effect  calls formatInput, initializeDatePicker(), initializeInputControlEventListeners(),
 *          initializeNewItem(), initializeDeleteItem()
 */
__VECTOR__.initialize = function()
{
    __VECTOR__.initializeNewItem();
    __VECTOR__.initializeDeleteItem();
};


/**
 * binds the info of all the index, disables the click events' default of ".new_key_val" and attaches a cloned template
 */
__VECTOR__.initializeNewItem = function()
{
    __VECTOR__.bindIndexInfo();
    $(".kwen-vec-push-back").on("click", function()
    {
        __VECTOR__.attachClonedTemplate.call($(this).parent());
    });
};

__VECTOR__.initializePostSanitation = function()
{
    jQuery('form').submit(function()
    {
        window.$indexTemplate.remove();
    });
};

/**
 * clones the indexTemplate, removes the representing class, shows it and places it after the button and places
 * a name with the right index to the inputs
 */
__VECTOR__.attachClonedTemplate = function()
{
    var $this = jQuery(this);
    var $template = $(window.$indexTemplate.clone());
    $template.attr("data-curr-index", window.newIndex);

    $template.removeAttr('hidden');
    $this.after($template);

    var $inputs = $template.find("input, select");
    $inputs.each(function(index, element)
    {
        if (element.getAttribute("name"))
            element.setAttribute("name", element.getAttribute("name") + "_" + window.newIndex);
    });
    ++window.newIndex;
};

/**
 * binds the index info
 *
 * @post    window.$indexTemplate will be equal to the jQuery object of '.index_template'
 *          @verbatim window.$indexTemplate == jQuery('.index_template') @endverbatim
 * @post    the newIndex will be equal to getNewIndex()
 *          @verbatim window.newIndex == getNewIndex() @endverbatim
 */
__VECTOR__.bindIndexInfo = function()
{
    window.$indexTemplate = $('.Kwen-tuple-template');
    window.newIndex = window.$indexTemplate.data("new-index");
};


__VECTOR__.initializeDeleteItem = function()
{
    $(".Kwen-vector").on("click", ".Kwen-tuple-delete", function()
    {
       $(this).parent().parent().remove();
    });
};