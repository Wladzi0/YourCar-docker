import React from 'react';
import ReactDOM from 'react-dom';
import SearchBar from '../components/SearchBar';
import Models from '../components/Model';
import SearchContextProvider from '../contexts/SearchContext';


class App extends React.Component {

  render () {
    return (
      // <SearchContextProvider>
      //     <SearchBar placeholder="Search a cars"/>
      // </SearchContextProvider>
      <Models/>
    );
  }
}

ReactDOM.render(<App/>, document.getElementById('searching'));


// changeLanguage(event){
//
// }
