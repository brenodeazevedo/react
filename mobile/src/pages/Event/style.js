import { StyleSheet } from 'react-native';
import Constants from 'expo-constants';

export default StyleSheet.create({
    container:{
        flex: 1,
        paddingHorizontal:24, 
        paddingTop: Constants.statusBarHeight + 20,

    },

    header:{
        justifyContent: 'space-between',
        alignItems: 'flex-end'
    },
    headerText:{
        fontSize:15,
        color: '#737380'
    },
    headerTextBold:{
        fontWeight:'bold'
    },
    title:{
        fontSize:30,
        marginBottom:15,
        marginTop:40,
        color: '#23593d',
        fontWeight:'bold'
    },
    description:{
        fontSize:16,
        lineHeight:24,
        color: '#737380'
    },

    eventList:{
        marginTop: 30,
        
    },
    event:{
        padding:24,
        borderRadius: 8,
        backgroundColor:'#FFF',
        marginBottom:16
    },

    eventType:{
        fontSize: 14,
        color: '#41414d',
        fontWeight: 'bold',

    },

    eventValue:{
        marginTop:8,
        fontSize:15,
        marginBottom:10,
        color: '#737380',
        marginLeft:10
    },  

    ticketButton:{
        flexDirection: 'row',
        justifyContent:'space-between',
        alignItems:'center',
        marginTop:10
    },

    ticketButtonText:{
        color: '#23593d',
        fontSize:15,
        fontWeight:'bold'
    }

});