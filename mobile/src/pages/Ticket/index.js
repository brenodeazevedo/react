import React, { useState,useEffect } from 'react';
import { useNavigation, useRoute } from '@react-navigation/native';
import { Feather } from '@expo/vector-icons';
import { View, Text, TouchableOpacity, FlatList } from 'react-native';

import styles from './style';

export default function Ticket() {
    const navigation = useNavigation();
    const route = useRoute();

    const event = route.params.event;
    const [ticket, setTicket] = useState([]);

    useEffect( () => {
        setTicket(event.ticket_event);
        
    },[])
    
    function navigateBack(){
        navigation.goBack();
         
    }

    return (
        <View style={styles.container}> 
            <View style={styles.header}>
                <TouchableOpacity onPress={navigateBack}>
                   <Feather name="arrow-left" size={28} color="#23593d" />
                </TouchableOpacity>  
            </View>

            <View style={styles.event}>
                <Text style={styles.eventType}>Evento:</Text>
                <Text style={styles.eventValue}>{event.name}</Text>

                <Text style={styles.eventType}>Data:</Text>
                <Text style={styles.eventValue}>{event.date}</Text>

                <Text style={styles.eventType}>Categoria:</Text>
                <Text style={styles.eventValue}>{event.category}</Text>

                <Text style={styles.eventType}>Descrição:</Text>
                <Text style={styles.eventValue}>{event.description}</Text>

            </View> 

            <View style={styles.ticketBox}>
                <Text style={styles.TicketTitle}> INGRESSOS:</Text>
                {ticket.length === 0 && <Text> Sem Ingresso Cadastrado </Text> }
                
                <FlatList 
                data={ticket}
                style={styles.ticketList}
                keyExtractor={ ticket => String(ticket.id)}
                 
                renderItem={({item: ticket}) => (

                <View style={styles.ticket}>
                    <Text style={styles.ticketType}>{ticket.name} / {
                        Intl.NumberFormat('pt-BR', 
                        { style: 'currency', currency:'BRL' }).
                        format(ticket.value)}
                    </Text>
                    <Text style={styles.ticketValue}>Setor: {ticket.sector}</Text>
 
                </View>

                )}
            />

            </View>

        </View>
    );
} 