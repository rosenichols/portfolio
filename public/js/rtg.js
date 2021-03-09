/**
 * Set up listener to show or hide the random topic generator.
 * Yeah, bringin it back.
 */
const randomTopicGenerator = (function () {

  const rtgShow = document.getElementById('showRTG');
  const rtgHide = document.getElementById('hideRTG');
  const theRTG = document.getElementById('theRTG');
  const rtgInput = document.getElementById('ContactForm_subject');
  const generateBtn = document.getElementById('generateBtn');
  let prevNumber = null;
  let number = null;

  const topics = [
    'It\'s times like these...',
    'Apples',
    'Pears',
    'Piano',
    'Pink cocktails',
    'Fitzgerald',
    'Vintage industrial interiors',
    'New music',
    'Old music',
    'Tennis',
    'Dromedary camels',
    'Bactrian camels',
    'The last book I read',
    'Berlin'
  ];

  /**
   * Generate a new random number between zero and thirteen.
   * i.e. not the same as the one just generated.
   */
  const _generateRandomNumber = function (prev = prevNumber) {

    do {
      number = Math.floor(Math.random() * 13);
    }
    while (number === prev);

    return number;
  };

  /**
   * Generate a random topic.
   */
  const _generateTopic = function () {

    let index = _generateRandomNumber();
    console.log(index);

    if (rtgInput) {
      rtgInput.value = topics[index];
    }
    prevNumber = index;
  };


  return {

    /**
     * Show or hide random topic generator based on user input.
     * Generate new random topic on user input.
     */
    setUp: function () {

      if (theRTG) {

        if (rtgShow) {
          rtgShow.addEventListener('click', function (event) {
            event.preventDefault();
            rtgShow.classList.add('hidden');
            theRTG.classList.remove('hidden');
          });
        }

        if (rtgHide) {
          rtgHide.addEventListener('click', function (event) {
            event.preventDefault();
            rtgInput.value = '';
            rtgShow.classList.remove('hidden');
            theRTG.classList.add('hidden');
          });
        }

        if (generateBtn) {
          generateBtn.addEventListener('click', function (event) {
            event.preventDefault();
            _generateTopic();
          });
        }
      }
    }
  };

})();

randomTopicGenerator.setUp();
