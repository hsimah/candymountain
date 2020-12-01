import Logo from '../../components/logo.js'
const styles = css`/wp-content/plugins/candymountain/src/js/routes/home/index.css`

const { payload } = window;

export default function Tasks() {
  return html`
<div className=${styles}>
  <header className="App-header">
    <${Logo} className="App-logo" />
    ${payload.data.tasks.nodes.map(n => {
const href = `/?task=${n.slug}`;
    return html`
        <a
          key={${n.id}}
          className="App-link"
          href="${href}"
        >
          ${n.title}
      </a>
    `})}
  </header>
</div>
`
} 
