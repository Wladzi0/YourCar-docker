import React, {createContext} from 'react';
export const SearchContext = createContext();

class SearchContextProvider extends React.Component {
	constructor(props) {
		super(props);
		this.state = {
			records: [
        {task:'I will search'},
        {task:'I will search'},
        {task:'I will search'},
      ],
		};
	}
	//fetch
	fetchRecords() {}

	//find
	findRecords() {}

	render() {
		return (
			<SearchContext.Provider value={{
					...this.state,
					fetchRecords: this.fetchRecords.bind(this),
					findRecords: this.findRecords.bind(this),
				}}>
			    {	this.props.children}
      </SearchContext.Provider>
			);
  }
}
export default SearchContextProvider;
