import React from 'react';
import { createStackNavigator} from '@react-navigation/stack';
import { NavigationContainer} from '@react-navigation/native';

const AppStack = createStackNavigator();

import Event from './pages/Event';
import Ticket from './pages/Ticket';

export default function Routes(){
    return(
        <NavigationContainer>
            <AppStack.Navigator screenOptions={{ headerShown: false}}>
                <AppStack.Screen name="Event" component={Event} />
                <AppStack.Screen name="Ticket" component={Ticket} />
            </AppStack.Navigator>
        </NavigationContainer>
    );
}