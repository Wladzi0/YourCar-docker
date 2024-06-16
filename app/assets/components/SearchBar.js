import Box from '@material-ui/core/Box';
import TextField from '@material-ui/core/TextField';
import {makeStyles} from "@material-ui/styles";
import React, {useContext} from 'react';
import SearchIcon from '@material-ui/icons/Search';

import {SearchContext} from '../contexts/SearchContext';

function SearchBar({placeholder}) {

	// const context = useContext(SearchContext);
	return (
      <div className="search">
        <div  className="searchInputs">
          <input className="text" placeholder={placeholder}/>
        </div>
        <div  className="searchIcon">
          <SearchIcon className="text-white"/>
        </div>
        <div  className="dataResult">
        {response.map((value,key)=>{
          return
        <a>
            {value.title}
        </a>
        })}
        </div>
      </div>
  //   <Box className="text-white" noValidate="noValidate">
	// 	<TextField id="outlined-basic" label="Search a cars" variant="standard" InputProps={{
	// 			style: {
  //         color:'white',
	// 				borderBottom: '1px solid white'
	// 			}
	// 		}} InputLabelProps={{
	// 			style: {
  //
	// 				color: 'gray'
	// 			}
	// 		}}/>
  //
	// </Box>
);
};

export default SearchBar;
