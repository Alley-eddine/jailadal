import logo from './logo.svg';
import './App.css';
import Header from './components/Header'
import Menu from './components/menu/Menu'
import Items from './components/items/Items'


function App() {
  return (
    <div className="App">
        <div>
     <Header />
        </div>
        <div><Items /></div>

    </div>
  );
}

export default App;
