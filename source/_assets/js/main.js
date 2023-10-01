import('preline')
import('cookieconsent').then(() => {
    window.cookieconsent.initialise({
        palette: {
          popup: { background: '#fff' },
          button: { background: '#3f51b5' }
        },        
        position: 'bottom',
      })
})


if(typeof prices !== 'undefined') {
  const selectElement = document.getElementById('prices-select');
  const outputSpan = document.getElementById('priceTag');
  const periodElement = document.getElementById('period');
  const featureElement = document.getElementById('feature-leads');
  const signUpElement = document.getElementById('signup-link');
  const signUpUrl = signUpElement.getAttribute('href');

  function getPrice()
  {
    const selectedValue = selectElement.value;    

    if(periodElement.checked) {
      return {'id':`${prices[selectedValue]['id']}` , 'period': `$ ${prices[selectedValue]['year']}`};
    } else {
      return {'id':`${prices[selectedValue]['id']}` , 'period': `$ ${prices[selectedValue]['month']}`};
    }
  }

  selectElement.addEventListener('change', function() {
    const price = getPrice();
    outputSpan.textContent = price.period;
    
    featureElement.textContent = selectElement.value;
    signUpElement.setAttribute('href', `${signUpUrl}?plan=${price.id}&period=${periodElement.checked ? 'year' : 'month'}`);
  });

  periodElement.addEventListener('change', function() {    
    const price = getPrice();
    outputSpan.textContent = price.period;
    
    featureElement.textContent = selectElement.value;
    signUpElement.setAttribute('href', `${signUpUrl}?plan=${price.id}&period=${periodElement.checked ? 'year' : 'month'}`);
  });

  document.addEventListener("DOMContentLoaded", function(){
    outputSpan.textContent = getPrice().period;
    featureElement.textContent = selectElement.value;
    signUpElement.setAttribute('href', `${signUpUrl}?plan=${selectElement.value}&period=${periodElement.checked ? 'year' : 'month'}`);
  });  


}