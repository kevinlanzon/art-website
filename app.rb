require 'sinatra'

get '/' do
  erb :index
end

get '/domestic_portraits' do
  erb :domestic_portraits
end

get '/large_paintings' do
  erb :large_paintings
end

get '/recent_exhibitions' do
  erb :recent_exhibitions
end

get '/about' do
  erb :about
end

get '/contact' do
  erb :contact
end
