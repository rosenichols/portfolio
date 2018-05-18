/**
 * Transform email address from obscured to plain
 */
const transformEmail = (function () {

  const emails = document.querySelectorAll('.transform-email');
  const atRegex = new RegExp(/\[at]/);
  const dotRegex = new RegExp(/\[dot]/, 'g');
  let str;

  return {

    /**
     * Do the transformation.
     */
    run: function () {

      if (emails) {

        for (let i = 0; i < emails.length; i++) {

          // Begin with the existing text.
          str = emails[i].innerText;

          // Replace [at] with @.
          str = str.replace(atRegex, '@');

          // Replace [dot] with .
          str = str.replace(dotRegex, '.');

          // Put the replaced text back.
          emails[i].innerText = str;
        }
      }
    }
  };

})();

transformEmail.run();
