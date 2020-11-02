import React, { useEffect, useState, useCallback} from 'react';
 
import { useNavigation } from '@react-navigation/native';
import { Feather } from '@expo/vector-icons';
import { 
    View, 
    FlatList, 
    Text, 
    TouchableOpacity, 
    ScrollView,
    RefreshControl,
    SafeAreaView,
 } from 'react-native';

import api from '../../services/api';

import styles from './style';

export default function Event() {

    const navigation = useNavigation();
    const [ event, setEvent] = useState([]);
    const [ total, setTotal] = useState(0);
    const [refreshing, setRefreshing] = useState(false);
    const [loading, setLoading] = useState(false);

    const onRefresh = useCallback(() => {
         
        setRefreshing(true);
        
      }, []);


    function navigateToTicket(event){
        navigation.navigate('Ticket',{ event });
    }

    async function loadEvent(){
    
    setLoading(true)
    await api.get('/event/list')
        .then( response => {
            setEvent(response.data)
            setTotal(response.data.length)
            setRefreshing(false)
            setLoading(false)
        })
        .catch(error => {
            setRefreshing(false)
            setLoading(false)
            alert(error);
            
        });   

    }

    useEffect( () => {
        
        loadEvent() 
        
    },[refreshing])

    return (
    <SafeAreaView style={styles.container}>
        <ScrollView
            contentContainerStyle={styles.scrollView}
            refreshControl={
                <RefreshControl refreshing={refreshing} onRefresh={onRefresh} />
            }
            >

            <View>
                <View style={styles.header}>
                    <Text style={styles.headerText}>
                    Total de <Text style={styles.headerTextBold}> {total} </Text> Eventos
                    </Text>
                </View>

                <Text style={styles.title}>Óla, Seja bem vindo!</Text>
                <Text style={styles.description}>Todos os detalhes dos nossos eventos para você dá uma olhada</Text>
                {loading === true && <Text>Carregando...</Text>}
                

                <FlatList 
                    data={event}
                    style={styles.eventList}
                    keyExtractor={ event => String(event.id)}
                    showsVerticalScrollIndicator={false}
                    renderItem={({ item: event}) => (

                    <View style={styles.event}>
                        <Text style={styles.eventType}>Evento:</Text>
                    <Text style={styles.eventValue}>{event.name}</Text>

                        <Text style={styles.eventType}>Data:</Text>
                        <Text style={styles.eventValue}>{event.date }</Text>

                        <Text style={styles.eventType}>Categoria:</Text>
                        <Text style={styles.eventValue}>{event.category}</Text>

                        <TouchableOpacity 
                        style={styles.ticketButton} 
                        onPress={() => navigateToTicket(event)}>
                            <Text style={styles.ticketButtonText}> Leia Mais</Text>
                            <Feather name="arrow-right" size={16} color="#23593d" />
                        </TouchableOpacity>
                    </View>

                    )}
                />
    
            </View>  
            </ScrollView>
        </SafeAreaView>
    );
}