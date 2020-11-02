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
    event:{
        padding:24,
        borderRadius: 8,
        backgroundColor:'#fecb37',
        marginBottom:16,
        marginTop:15
    },

    eventType:{
        fontSize: 18,
        color: '#23593d',
        fontWeight: 'bold',

    },

    eventValue:{
        marginTop:8,
        fontSize:15,
        marginBottom:10,
        color: '#23593d',
        marginLeft:10
    },
    ticketList:{
        marginBottom: '100%',
        
    },

    ticketType:{
        fontSize: 14,
        color: '#FFF',
        fontWeight: 'bold',

    },

    ticketValue:{
        marginTop:8,
        fontSize:15,
        marginBottom:10,
        color: '#FFF',
        marginLeft:10
    },

    ticket:{
        padding:15,
        borderRadius: 8,
        backgroundColor:'#398042',
        marginBottom:16,
        marginTop:5
    },
    TicketTitle:{
        fontSize:20,
        fontWeight:'bold',
        color:'#23593d'
    }
});