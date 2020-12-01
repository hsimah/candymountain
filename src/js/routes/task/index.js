const styles = css`/wp-content/plugins/candymountain/src/js/routes/home/index.css`
import Logo from '../../components/logo.js'

export default function Task() {
  const { payload } = window;
  return html`<div className=${styles}>
      <header className="App-header">
        <${Logo} className="App-logo" />
        This is ${payload.data.task.title}
      </header>
    </div>
  `;
}