const { ApolloServer, gql } = require('apollo-server');

// Definición del esquema con GraphQL
const typeDefs = gql`
  # Definición del tipo User
  type User {
    id: ID!
    name: String!
    age: Int
  }

  # Definición de Query para obtener usuarios
  type Query {
    users: [User!]     # Retorna una lista de usuarios
  }

  # Definición de Mutation para agregar un usuario
  type Mutation {
    addUser(name: String!, age: Int!): User
  }
`;

// Datos de ejemplo
const users = [
  { id: '1', name: 'Alice', age: 25 },
  { id: '2', name: 'Bob', age: 30 },
];

// Definición de los resolvers
const resolvers = {
  Query: {
    users: () => users,  // Retorna la lista de usuarios
  },
  Mutation: {
    addUser: (_, { name, age }) => {
      const newUser = { id: String(users.length + 1), name, age };
      users.push(newUser);  // Añade el nuevo usuario a la lista
      return newUser;
    },
  },
};

// Configuración del servidor Apollo
const server = new ApolloServer({ typeDefs, resolvers });

// Inicia el servidor
server.listen().then(({ url }) => {
  console.log(`Servidor GraphQL listo en ${url}`);
});