import { React, ReactDOM } from 'https://unpkg.com/es-react@16.8.30/index.js';
import htm from 'https://unpkg.com/htm@2.1.1/dist/htm.mjs'
import csz from 'https://unpkg.com/csz@0.1.2/index.js'
window.React = React
window.css = csz
window.html = htm.bind(React.createElement)

function getRoute() {
  const params = new URLSearchParams(location.search);
  if (params.has('post_type')) {
    return React.lazy(() => import('./routes/home/index.js'));
  }
  if (params.has('task')) {
    return React.lazy(() => import('./routes/task/index.js'));
  }
  return React.lazy(() => import('./routes/notfound/index.js'))
}

function App() {

  return html`
    <${React.Suspense} fallback=${html`<div></div>`}>
      <${getRoute()}/>
    <//>
  `;
}

ReactDOM.render(
  html`<${App} />`,
  document.getElementById('root')
)
