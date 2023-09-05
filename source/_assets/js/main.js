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
